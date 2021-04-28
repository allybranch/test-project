import { Component } from '@angular/core';
import {User} from './user';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['../../../stylesheets/styles.css']
})
export class AppComponent {
  title = 'user-info';
  constructor(private http: HttpClient) {  }

  confirm_msg = '';
  data_submitted = '';

  userModel = new User('', '', '', '', '', '');
  responsedata = new Object();

  changeUser(data: any): void {
    console.log(data);
    this.confirm_msg = 'Your account was updated sucessfully';
 }

  onSubmit(form: any): void {
    console.log('You submitted value: ', form);
    this.data_submitted = form;
    console.log('form submitted ', form);
    let params = JSON.stringify(form);
    this.http.post<User>('http://localhost/projects/project/changeUser.php', params)
    .subscribe((response_from_php) => {
       this.responsedata = response_from_php;
    }, (error_in_communication) => {
       // An error occurs, handle an error in some way.
       console.log('Error ', error_in_communication);
    })  }



}
