import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {MatGridListModule} from '@angular/material/grid-list';
import {MatIconModule} from '@angular/material/icon';
import {MatDividerModule} from '@angular/material/divider';
@NgModule({
  exports:[
    MatGridListModule,
    MatDividerModule
  ],
  imports: [
    CommonModule,
    MatGridListModule,
    MatIconModule,
    MatDividerModule
  ],
  declarations: []
})
export class MatModuleRequiredModule { }
