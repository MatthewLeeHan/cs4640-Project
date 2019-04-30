import { Component } from '@angular/core';
import { Order } from './order';

import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'], 
  styles: ['h1 { font-family: "Ubuntu", sans-serif; }']
})
export class AppComponent {
  title = 'Help Page';


  // let's create a property to store a response from the back end
  // and try binding it back to the view
  responsedata;

  // drinks = ['Coffee', 'Tea', 'Milk'];
  orderModel = new Order('', '',null , '', '');
  options = ["Creating an event", "Creating an account", "Viewing past events", "Reporting error", "Others"];
 
  constructor(private http: HttpClient) { }

  senddata(data) {

     let params = JSON.stringify(data);

     //this.http.get('http://localhost/cs4640s19/ngphp-get.php?str='+encodeURIComponent(params))
    //  this.http.get('http://localhost/cs4640-Project/ngphp-get.php')
     this.http.post('http://localhost/cs4640-Project/ngphp-post.php', data)
     .subscribe((data) => {
        this.responsedata = data;
        console.log(this.responsedata);
        alert("Thank you for your feedback!");
        window.location.href = "http://localhost/cs4640-Project";
        
     }, (error) => {
        console.log('Error', error);
     })
  }
}