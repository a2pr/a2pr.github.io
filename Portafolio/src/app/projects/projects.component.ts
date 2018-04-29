import { Component, OnInit } from '@angular/core';
import { SkillService } from '../services/skill.service';
import { Skill } from '../shared/skill';
@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.scss']
})
export class ProjectsComponent implements OnInit {

  projects:Skill[];
  constructor(private skillService:SkillService) { }

  ngOnInit() {
    this.skillService.getFeatured().subscribe((projects)=>{
      this.projects=projects;
      console.log(projects);
    })
  }

}
