import { Component, OnInit } from '@angular/core';
import { SkillService } from '../services/skill.service';
import { Skill } from '../shared/skill';

@Component({
  selector: 'app-skills',
  templateUrl: './skills.component.html',
  styleUrls: ['./skills.component.scss']
})
export class SkillsComponent implements OnInit {

skillsBasic:Skill[];
skillsInter:Skill[];
skillsAdv:Skill[];
  constructor(private skillService:SkillService) { }

  ngOnInit() {
    this.skillService.getSkills()
      .subscribe(skills=>{
        this.skillsBasic=skills.filter((skills)=>skills.level==="Basic");
        
        this.skillsInter=skills.filter((skills)=>skills.level==="Intermidate");

        this.skillsAdv=skills.filter((skills)=>skills.level==="Advanced");
        
      
      })
  }

}
