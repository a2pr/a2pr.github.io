import { Injectable } from '@angular/core';
import {PROJECTS} from '../shared/projects'
import {Project} from '../shared/project'
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/observable/of';
import 'rxjs/add/operator/map';
@Injectable()
export class ProjectService {

  constructor() { }

  getFeatured():Observable<Project[]>{
    return Observable.of(PROJECTS.filter((project)=>{
      return project.featured===true
    }))
  }
}
