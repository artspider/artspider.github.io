import 'package:flutter/material.dart';
import 'package:graphql_flutter/graphql_flutter.dart';

class Login extends StatefulWidget {
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
  final _emailController = TextEditingController();
  final _contrasenaController = TextEditingController();
  final GlobalKey<ScaffoldState> _scaffoldkey = new GlobalKey<ScaffoldState>();

  String mutation = '''
  mutation signIn(\$input: SignInInput!) {
    signIn(input: \$input) {
      email
      contrasena
    }
  }
  '''
      .replaceAll('\n', '');

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldkey,
      appBar: AppBar(
        title: Text('Login Page'),
      ),
      body: Mutation(
        options: MutationOptions(document: mutation),
        builder: (RunMutation runMutation, QueryResult result) {
          return Center(
            child: Column(
              children: <Widget>[
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
                    'Login',
                    style: TextStyle(color: Colors.white),
                  ),
                  color: Colors.blue,
                  onPressed: () {
                    print(_contrasenaController.text + _emailController.text);
                    runMutation({
                      'input': {                        
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
          _failSnackBar(){
            print("Correo o contraseña inválidos");
            final snackBar = SnackBar(
              content: new Text("Email o contraseña incorrectos"),
              backgroundColor: Colors.red,
              action: new SnackBarAction(label: 'Ok', onPressed: (){
                print('ok en snackbar');
              },),
            );

            _scaffoldkey.currentState.showSnackBar(snackBar);
          }
          if (result.hasErrors) {
            _failSnackBar();
            print(['optimistic', result.errors]);
          }
          return cache;
        },
        onCompleted: (dynamic resultdata) {
          _okSnackBar(){
            print("Logueado con exito");
            final snackBar = SnackBar(
              content: new Text("Sus credenciales han sido aceptadas"),
              backgroundColor: Colors.greenAccent,
              action: new SnackBarAction(label: 'Ok', onPressed: (){
                print('ok en snackbar');
              },),
            );

            _scaffoldkey.currentState.showSnackBar(snackBar);
          }
          print("Logueado con exito");
          _okSnackBar();
        },
      ),
    );
  }
}
