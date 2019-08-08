import 'package:flutter/material.dart';

import './logo.dart';
import './formulario.dart';

class MyHomePage extends StatelessWidget {
  MyHomePage({title = 'titulo'});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      resizeToAvoidBottomPadding: true,
      body: Stack(
        fit: StackFit.expand,
        children: <Widget>[
          Logo(),          
          Formulario()
        ],
      ),
    );
  }
}
