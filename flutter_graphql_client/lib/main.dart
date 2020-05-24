import 'package:flutter/material.dart';
import 'package:flutter_graphql_client/src/Login.dart';
import 'package:graphql_flutter/graphql_flutter.dart';
import 'src/HomePage.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final HttpLink httpLink = HttpLink(
      uri:
        'https://mhsserver.azurewebsites.net/'          
        //'http://medicalhs.homelinux.net:3000/'
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
        home: Login(),
      ),
      client: client,
    );
  }
}
