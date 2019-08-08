import 'package:flutter/material.dart';
import 'package:english_words/english_words.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "Welcome to flutter",
      theme: ThemeData(
        primaryColor: Colors.blueGrey,
        dividerColor: Colors.blueAccent,
      ),
      home: RandomWords(),
    );
  }  
}

class RandomWords extends StatefulWidget {
  @override
   _RandomWordsState createState() {
    var randomWordsState = _RandomWordsState();
        return randomWordsState;
  }
}

class _RandomWordsState extends State<RandomWords> {
  final _sugerencias = <WordPair>[];
  final _biggerFont = const TextStyle(fontSize: 18);
  var titulo = 'Bienvenidos a flutter';
  final _saved = Set<WordPair>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text(titulo),
          actions: <Widget>[
            IconButton(
              icon: Icon(Icons.list),
              onPressed: _pushSaved,
              )
          ],
        ),
        body: _buildSugerencias(),
      );
  }

void _pushSaved(){
  Navigator.of(context).push(
    MaterialPageRoute(
      builder: (context){
        final tiles = _saved.map((pair) {
          return ListTile(
            title: Text(
              pair.asPascalCase, 
              style: _biggerFont,
            ),
          );
        });

        final _divider = ListTile.divideTiles(
          context: context,
          tiles: tiles).toList();
          return Scaffold(
            appBar: AppBar(
              title: Text('Sugerencias guardadas'),
            ),
            body: ListView(children: _divider,),
          );
      })
  );
}

  Widget _buildSugerencias(){    
    return ListView.builder(
      padding: const EdgeInsets.all(16.0),
      itemBuilder: (context, i){
        if(i.isOdd){
          return Divider();
        }
        if(i >= _sugerencias.length){
          _sugerencias.addAll(generateWordPairs().take(10));
        }
        final index = i ~/ 2;
        return _buildRow(_sugerencias[index]);
      },
    );
  }

  Widget _buildRow(WordPair pair){
    final _alreadySaved = _saved.contains(pair);
    return ListTile(
      title: Text(
        pair.asPascalCase, 
        style: _biggerFont,
      ),
      trailing: Icon(
        _alreadySaved ? Icons.favorite : Icons.favorite_border,
        color: _alreadySaved ? Colors.red : null,
      ),
      onTap: (){
        setState(() {
         if(_alreadySaved) {
           _saved.remove(pair);
         }else{
           _saved.add(pair);
         }
        });
      },
    ); 
  }
}