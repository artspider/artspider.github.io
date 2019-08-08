import 'package:flutter/material.dart';
import 'package:graphql_flutter/graphql_flutter.dart';
import 'src/HomePage.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final HttpLink httpLink = HttpLink(
      uri:
          'https://mhsserver.azurewebsites.net/graphql?code=EArqvtFw%2FvitHOvYzsARhD7szq3xl8WWgVAOmoaP3oKBz4az7u588Q%3D%3D'
    );

    ValueNotifier<GraphQLClient> client = ValueNotifier(
      GraphQLClient(
        link: httpLink,
        cache: NormalizedInMemoryCache(
          dataIdFromObject: typenameDataIdFromObject,
        ),
      ),
    );

    return GraphQLProvider(
      child: MaterialApp(
        home: HomePage(),
      ),
      client: client,
    );
  }
}
