import 'package:flutter/material.dart';
import 'package:flutter_graphql_client/src/AddUser.dart';
import 'package:graphql_flutter/graphql_flutter.dart';

class HomePage extends StatefulWidget {
  @override
  _HomePageState createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  final TextEditingController nombreController = TextEditingController();
  final TextEditingController apatController = TextEditingController();
  final String myQuery = '''
  query{
    users{
      _id,
      nombre,
      aPaterno,
      email
    }
  }
  ''';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('GQL CRUD'),
      ),
      body: Query(
        options: (QueryOptions(document: myQuery)),
        builder: (
          QueryResult result, {
          VoidCallback refetch,
        }) {
          if (result.data == null) {
            print('Ningun resultado');
            return Center(
              child: CircularProgressIndicator(),
            );
          } else if (result.loading) {
            print('cargando...');
            return Center(
              child: CircularProgressIndicator(),
            );
          }
          return ListView.builder(
            itemCount: result.data['users'].length,
            itemBuilder: (context, index) {
              return ListTile(
                title: Text(result.data['users'][index]['nombre']),
                subtitle: Text(result.data['users'][index]['email']),
              );
            },
          );
        },
      ),
      floatingActionButton: FloatingActionButton(
        child: Icon(Icons.add),
        onPressed: () => Navigator.push(
          context,
          MaterialPageRoute(
            builder: (context) => AddUser(),
          ),
        ),
      ),
    );
  }
}
