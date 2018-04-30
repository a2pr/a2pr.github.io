import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.scss']
})
export class ContactComponent implements OnInit {
  @Input()
  control:boolean=true;
  constructor() { }

  ngOnInit() {
  }

}
