import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {MatGridListModule} from '@angular/material/grid-list';
import {MatIconModule} from '@angular/material/icon';
import {MatDividerModule} from '@angular/material/divider';
import {MatCardModule} from '@angular/material/card';
import {MatChipsModule} from '@angular/material/chips';
import {MatListModule} from '@angular/material/list';

@NgModule({
  exports:[
    MatGridListModule,
    MatDividerModule,
    MatCardModule,
    MatChipsModule,
    MatListModule,
  ],
  imports: [
    CommonModule,
    MatGridListModule,
    MatIconModule,
    MatDividerModule,
    MatCardModule,
    MatChipsModule,
    MatListModule
  ],
  declarations: []
})
export class MatModuleRequiredModule { }
