import 'package:flutter/material.dart';

class Products extends StatelessWidget {
  final List<String> products;
  Products(this.products);

  @override
  Widget build(BuildContext context) {
    return Container(
      child: Column(
        children: products
            .map((element) => Card(
                  child: Column(
                    mainAxisSize: MainAxisSize.min,
                    children: <Widget>[
                      Image.asset('assets/Food.jpg'),
                      Text(element)
                    ],
                  ),
                ))
            .toList(),
      ),
    );
  }
}
