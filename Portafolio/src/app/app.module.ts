//modules
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import {MaterialModule} from './shared/material.module';
import { FlexLayoutModule } from '@angular/flex-layout';
import { AppRoutingModule } from './app-routing/app-routing.module';
import { MatModuleRequiredModule } from './mat-module-required/mat-module-required.module';
import 'hammerjs';
import { Ng2CarouselamosModule } from 'ng2-carouselamos';
//components
import { AppComponent } from './app.component';
import { MenuComponent } from './menu/menu.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { SkillsComponent } from './skills/skills.component';
import { SkillService } from './services/skill.service';
import { ProjectsComponent } from './projects/projects.component';
import { ProjectService } from './services/project.service';
import { ContactComponent } from './contact/contact.component';

//services

@NgModule({
  declarations: [
    AppComponent,
    MenuComponent,
    FooterComponent,
    HomeComponent,
    AboutComponent,
    SkillsComponent,
    ProjectsComponent,
    ContactComponent,
    
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    MaterialModule,
    FlexLayoutModule,
    AppRoutingModule,
    MatModuleRequiredModule,
    Ng2CarouselamosModule

  ],
  providers: [SkillService, ProjectService],
  bootstrap: [AppComponent]
})
export class AppModule { }
