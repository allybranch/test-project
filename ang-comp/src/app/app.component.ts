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

  toggle : boolean = false;

  confirm_msg = '';
  data_submitted = '';
  updateinfo = new Object();

  userModel = new User('', '', '', '', '', '');
  responsedata = new Object();

  username = 'test';

  message = '';


  changeUser(data: any): void {
    console.log(data);
    this.confirm_msg = 'Your account was updated sucessfully';
 }

  onUsernameSubmit(form: any): void {
    this.toggle = true;
    console.log('You submitted value: ', form);
    this.data_submitted = form;
    console.log('form submitted ', form);
    let params = JSON.stringify(form);
    this.http.post<User>('http://localhost/projects/project/getUser.php', params)
    .subscribe((response_from_php) => {
       this.responsedata = response_from_php;
      this.userModel.username =this.responsedata['userInfo']['username'];
      this.userModel.firstname =this.responsedata['userInfo']['firstname'];
      this.userModel.lastname =this.responsedata['userInfo']['lastname'];
      this.userModel.email =this.responsedata['userInfo']['email'];


        this.toggle = true;
    }, (error_in_communication) => {
       // An error occurs, handle an error in some way.
       console.log('Error ', error_in_communication);
    }) 
  }



  onChangeUserSubmit(form: any): void {
    console.log('You submitted value: ', form);
    this.data_submitted = form;
    console.log('form submitted ', form);
    let params = JSON.stringify(form);
    this.http.post<User>('http://localhost/projects/project/changeUser.php', params)
    .subscribe((response_from_php) => {
       this.updateinfo = response_from_php;
        this.toggle = true;
        //decide which message to display
        console.log("Test: ", this.updateinfo['count']);
        if(this.updateinfo['count']==1){
          this.message="confirm";
        }
        else{
          this.message="fail";
        }
        
    }, (error_in_communication) => {
       // An error occurs, handle an error in some way.
       console.log('Error ', error_in_communication);
    }) 
  }



}
