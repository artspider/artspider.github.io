import 'package:flutter/material.dart';
import 'package:graphql_flutter/graphql_flutter.dart';

class AddUser extends StatefulWidget {
  _AddUserState createState() => _AddUserState();
}

class _AddUserState extends State<AddUser> {
  final _nombreUsuarioController = TextEditingController();
  final _emailController = TextEditingController();
  final _contrasenaController = TextEditingController();

  String mutation = '''
  mutation signUp(\$input: UserInput!) {
  signUp(input: \$input) {
    nombreUsuario
    email
    contrasena
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
                  decoration: InputDecoration(helperText: "Nombre de Usuario"),
                  controller: _nombreUsuarioController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "Email"),
                  controller: _emailController,
                ),
                TextField(
                  decoration: InputDecoration(helperText: "Contraseña"),
                  controller: _contrasenaController,
                ),
                MaterialButton(
                  child: Text(
                    'Add User',
                    style: TextStyle(color: Colors.white),
                  ),
                  color: Colors.blue,
                  onPressed: () {
                    print(_nombreUsuarioController.text +
                        _contrasenaController.text +
                        _emailController.text);
                    runMutation({
                      'input': {
                        'nombreUsuario': _nombreUsuarioController.text,
                        'contrasena': _contrasenaController.text,
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
