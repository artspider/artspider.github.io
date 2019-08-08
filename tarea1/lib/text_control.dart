import 'package:flutter/material.dart';

class TextControl extends StatelessWidget {
  final Function addText;

  TextControl(this.addText);

  @override
  Widget build(BuildContext context) {
    return FloatingActionButton(
                  onPressed: () {
                    addText('sweets');
                  },
                  tooltip: 'Increment',
                  child: Icon(Icons.add),
                );
  }
}