import 'package:flutter/material.dart';

import './login.dart';

class Formulario extends StatelessWidget {
  
  @override
  Widget build(BuildContext context) {
    return Positioned(
      top: 300.0,
      left: 10.0,
      right: 10.0,
      child: Column(
        children: <Widget>[
          new ListTile(
            leading: const Icon(Icons.person),
            title: new TextField(
              decoration: new InputDecoration(
                hintText: "UserName",
              ),
            ),
          ),
          new ListTile(
            leading: const Icon(Icons.lock_open),
            title: new TextField(
              obscureText: true,
              decoration: new InputDecoration(
                hintText: "Password",
              ),
            ),
          ),
          SizedBox(
            height: 35.0,
          ),
          Material(
            elevation: 5.0,
            borderRadius: BorderRadius.circular(10.0),
            color: Color(0xff01A0C7),
            child: Login(),
          ),
        ],
      ),
    );
  }
}
