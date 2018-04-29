import { Injectable } from '@angular/core';
import {Skill} from '../shared/skill';
import {SKILLS} from '../shared/skills';

import { Observable } from 'rxjs/Observable';
import 'rxjs/add/observable/of';
import 'rxjs/add/operator/map';
@Injectable()
export class SkillService {

  constructor() { }
  getSkills():Observable<Skill[]>{
    return Observable.of(SKILLS);
  }
}
