import 'package:flutter/material.dart';
import 'package:graphql_flutter/graphql_flutter.dart';
import 'src/HomePage.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final HttpLink httpLink = HttpLink(
      uri:          
          'https://mhsserver.azurewebsites.net/graphql?code=GxbtH2O8B6jxS0FRtE9RrcfUylSau5pgPm424BKL7R2lPrfl9MpaqA%3D%3D'
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
