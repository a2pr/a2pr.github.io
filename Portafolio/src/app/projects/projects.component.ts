import { Component, OnInit } from '@angular/core';
import {Project} from '../shared/project'
import { ProjectService } from '../services/project.service';
@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.scss']
})
export class ProjectsComponent implements OnInit {

  projects:Project[];
  images:Array<string>=[];
  constructor(private projectService:ProjectService) { }

  ngOnInit() {
    this.projectService.getFeatured()
      .subscribe((projects)=>{
        this.projects=projects;
        this.projects.forEach((project)=>{
          this.images.push(project.img);
        })
        console.log(this.images)
      })
  
  }

}
