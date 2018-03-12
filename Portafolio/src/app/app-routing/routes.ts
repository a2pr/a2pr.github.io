import {Routes} from '@angular/router';

import { HomeComponent } from '../home/home.component';
import { AboutComponent } from '../about/about.component';


export const routes:Routes=[
    {path:'about', component:AboutComponent},
    {path:'home', component:HomeComponent},
    {path:'', redirectTo:'/home', pathMatch:'full'}
]