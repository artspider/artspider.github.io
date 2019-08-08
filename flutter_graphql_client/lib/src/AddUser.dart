import 'package:flutter/material.dart';
import 'package:graphql_flutter/graphql_flutter.dart';

class AddUser extends StatefulWidget {
  _AddUserState createState() => _AddUserState();
}

class _AddUserState extends State<AddUser> {
  final _nombreController = TextEditingController();
  final _aPaternoController = TextEditingController();
  final _aMaternoController = TextEditingController();
  final _fNacimientoController = TextEditingController();
  final _emailController = TextEditingController();

  String mutation = '''
  mutation SignUp(\$input: UserInput) {
  signUp(input: \$input) {
    _id
    nombre
    aPaterno
    aMaterno
    email
  }
}
  '''
      .replaceAll('\n', '');
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Add USer'),
      ),
      body: Mutation(
        options: MutationOptions(document: mutation),
        builder: (RunMutation runMutation, QueryResult result) {
          return Center(
            child: Column(
              children: <Widget>[
                TextField(
                  decoration: InputDecoration(helperText: "Nombre"),
                  controller: _nombreController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "paterno"),
                  controller: _aPaternoController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "Materno"),
                  controller: _aMaternoController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "F. Nacimiento"),
                  controller: _fNacimientoController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "Email"),
                  controller: _emailController,
                ),
                MaterialButton(
                  child: Text(
                    'Add User',
                    style: TextStyle(color: Colors.white),
                  ),
                  color: Colors.blue,
                  onPressed: () {
                    print(_nombreController.text +
                        _aPaternoController.text +
                        _aMaternoController.text +
                        _fNacimientoController.text +
                        _emailController.text);
                    runMutation({
                      'input': {
                        'nombre': _nombreController.text,
                        'aPaterno': _aPaternoController.text,
                        'aMaterno': _aMaternoController.text,
                        'fechaNacimiento': _fNacimientoController.text,
                        'email': _emailController.text,
                      }
                    });
                  },
                )
              ],
            ),
          );
        },
        update: (Cache cache, QueryResult result) {
          if (result.hasErrors) {
            print(['optimistic', result.errors]);
          }
          return cache;
        },
        onCompleted: (dynamic resultdata) {
          Navigator.pop(context);
        },
      ),
    );
  }
}
