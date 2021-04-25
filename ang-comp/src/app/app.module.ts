import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from "@angular/forms";
import '@angular/compiler';


import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { RoutingModule } from 'angular-routing';

@NgModule({ 
  declarations: [
    AppComponent,
    HeaderComponent  
  ], 
  imports: [
    BrowserModule,
    NgbModule,
    FormsModule
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }     
  