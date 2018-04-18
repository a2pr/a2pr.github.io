import { Component, OnInit } from '@angular/core';
import { SkillService } from '../services/skill.service';
import { Skill } from '../shared/skill';

@Component({
  selector: 'app-skills',
  templateUrl: './skills.component.html',
  styleUrls: ['./skills.component.scss']
})
export class SkillsComponent implements OnInit {

skills:Skill[];
  constructor(private skillService:SkillService) { }

  ngOnInit() {
    this.skillService.getSkills()
      .subscribe(skills=>this.skills=skills.filter((skills)=>skills.level==="Basic"))
  }

}
