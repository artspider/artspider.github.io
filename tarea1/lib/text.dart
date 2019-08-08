import 'package:flutter/material.dart';

class MyText extends StatelessWidget {
  final String texto;

  MyText(this.texto);
  @override
  Widget build(BuildContext context) {
    return Center(
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Text(texto)
        ],
      ),
    );
  }
}
