import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {MatGridListModule} from '@angular/material/grid-list';

@NgModule({
  exports:[
    MatGridListModule
  ],
  imports: [
    CommonModule,
    MatGridListModule
  ],
  declarations: []
})
export class MatModuleRequiredModule { }
