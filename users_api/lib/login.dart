import 'dart:convert';
import 'dart:async';
import 'dart:io';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class Login extends StatefulWidget {
  _LoginState createState() => _LoginState();
}

class _LoginState extends State<Login> {
  final TextStyle style = TextStyle(fontFamily: 'Montserrat', fontSize: 20.0);
  final String url = 'https://peliculaslumen-pelis.azurewebsites.net';

  List data;

  @override
  void initState() {
    this.getJsonData();
    super.initState();
  }

  Future<String> getJsonData() async {
    print('obteniendo datos');
    /*
    var queryParameters = {
      'api_token':
          "sp1FsbcA94ieDFaPxNj7LGsvi5QdAQoXTAsNzBBQ6iLcraCmtcT6QbjbtOsY",
    };
    */
    //Uri.encodeFull(uri)
    //var uri = Uri.http('progtec.test','/api/programmers',);
    var uri = Uri.https('progtec.azurewebsites.net', '/api/programmers', );
    var response = await http
        .get(uri, headers: {
          HttpHeaders.contentTypeHeader: 'application/json', 
          HttpHeaders.authorizationHeader: 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6Ik1FSkdRVUZCTlRCQlF6Z3lOalV5UWtZNVJVTXpSRU5GUVROQk1qWkZSalUwUVVVd05rUTBNQSJ9.eyJpc3MiOiJodHRwczovL3BlbGljdWxhcy1hcGkuYXV0aDAuY29tLyIsInN1YiI6InNPUGJUOE5vVmpoM2oxVlJIZFNlbDM1eUYwaUNJdlBPQGNsaWVudHMiLCJhdWQiOiJodHRwOi8vcHJvZ3RlYy50ZXN0IiwiaWF0IjoxNTYwNjI3MjQzLCJleHAiOjE1NjA3MTM2NDMsImF6cCI6InNPUGJUOE5vVmpoM2oxVlJIZFNlbDM1eUYwaUNJdlBPIiwiZ3R5IjoiY2xpZW50LWNyZWRlbnRpYWxzIn0.PVLcOqzWM4puK4f-Bw-UnvmvEnjEZln4KepCUNbTeW1WkgIwxiGDyGEM_wg6HAjSgI_CNlW5PKknmjWPpQa_M9FJoLHJga6B8t0pU-MEDhJjAJrhpmoUbTvXJiqL5k3MV1-CXjblqyOJFf5rh_wV91vBQrqbp7WgagbS-B8UV6Pe_0ie5RnnxB1cLJSZtGd9mhhY4GcM74Y1PxqfI4dWIvzkklaaYc_q0JMK6wyJ7VYDqyHyfpH3lUrTglw7TBKzfszVNYCBuLMXJY9LvXBuFH4rEerpZrVc8b8cUHKsZMS0Fm9w0VBJwNbYDQwH3NZFCbq59nDl02Q0zsYDzuyzHw'
          });

    setState(() {
      var convertDataToJson = jsonDecode(response.body.toString());
      print(convertDataToJson);
    });

    return 'succes';
  }

  @override
  Widget build(BuildContext context) {
    return MaterialButton(
      //minWidth: MediaQuery.of(context).size.width,
      padding: EdgeInsets.fromLTRB(40.0, 15.0, 40.0, 15.0),
      onPressed: () {
        print('Enviando...');
      },
      child: Text("Ingresar",
          textAlign: TextAlign.center,
          style:
              style.copyWith(color: Colors.white, fontWeight: FontWeight.bold)),
    );
  }
}
