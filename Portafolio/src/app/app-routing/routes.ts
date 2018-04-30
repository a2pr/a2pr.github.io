import {Routes} from '@angular/router';

import { HomeComponent } from '../home/home.component';
import { AboutComponent } from '../about/about.component';
import { SkillsComponent} from '../skills/skills.component'
import { ProjectsComponent } from '../projects/projects.component';
import { ContactComponent } from '../contact/contact.component';

export const routes:Routes=[
    {path:'about', component:AboutComponent},
    {path:'home', component:HomeComponent},
    {path:'skills', component:SkillsComponent},
    {path:'projects', component:ProjectsComponent},
    {path:'contact', component:ContactComponent},
    {path:'', redirectTo:'/home', pathMatch:'full'}
]