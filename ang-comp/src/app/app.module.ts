import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

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
    RoutingModule.forRoot(),
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }   
  