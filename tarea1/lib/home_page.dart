import 'package:flutter/material.dart';

import './text_manager.dart';

class HomePage extends StatelessWidget {
  final String title;

  HomePage({this.title = 'Hola mundo'});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(title),
      ),
      body: Container(child: TextManager('hola')),
    );
  }
}
