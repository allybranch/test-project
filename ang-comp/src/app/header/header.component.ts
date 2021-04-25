import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['../../../../stylesheets/styles.css']
})
export class HeaderComponent implements OnInit {

  ngOnInit(): void {
  }

  //form submission
  onSubmit(form: any ): void {
    console.log('submitted search');
  }
}
