import { Component } from '@angular/core';
import { Order } from './order';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'], 
})

export class AppComponent {
  title = 'Give us feedback';
  drinks = ['Coffee', 'Tea', 'Milk'];
  orderModel = new Order('Jiwon', 'jc4va@virginia.edu', 3143326259, '', '', true);
}