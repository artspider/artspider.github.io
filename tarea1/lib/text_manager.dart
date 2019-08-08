import 'package:flutter/material.dart';

import './text.dart';
import './text_control.dart';

class TextManager extends StatefulWidget {
  final String startingText;

  TextManager(this.startingText);

  _TextManagerState createState() => _TextManagerState();
}

class _TextManagerState extends State<TextManager> {
  String _text = '';

  @override
  void initState() {
    _text = widget.startingText;
    super.initState();
  }

  void _addText(String texto) {
    setState(() {
      _text = texto;
    });
  }

  Widget build(BuildContext context) {
    const iconSize = 75;
    return LayoutBuilder(
      builder: (context, constraints) => Stack(
            fit: StackFit.expand,
            children: <Widget>[
              //Material(color: Colors.yellowAccent),
              Positioned(
                top: 10,
                child: MyText(_text),
              ),
              Positioned(
                top: constraints.maxHeight - iconSize,
                left: constraints.maxWidth - iconSize,
                child: TextControl(_addText),
              ),
            ],
          ),
    );
  }
}
