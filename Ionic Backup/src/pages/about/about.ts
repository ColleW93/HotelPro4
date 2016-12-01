import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import {Task} from '../../model/task';
//import {AlertController} from 'ionic-angular';
//import {Storage, LocalStorage} from 'ionic-angular/Storage';
import { Http } from '@angular/http';
//import { Response } from '@angular/Response';
//import { Post }           from '../../model/post';
import 'rxjs/Rx';
import { Observable }     from 'rxjs/Observable';

@Component({
  selector: 'page-about',
  templateUrl: 'about.html'
})
export class AboutPage {

  constructor(public navCtrl: NavController, public http: Http) {
  //  this.localStorage = new Storage(LocalStorage);
    //this.tasks = new Array();
    //this.localStorage.getJson("tasks").then(data => this.tasks = data);
    
       
  }

 // private localStorage:Storage;

  public tasks:Task[] = [];

  // mere om events http://ionicframework.com/docs/v2/api/components/nav/NavController/
  public ionViewDidEnter()
  {

    var url:string = "/myProxy/tasks";
    var response = this.http.get(url).map(res => res.json()).subscribe(data => this.tasks = data.tasks);

    return response;
          
    //this.localStorage.getJson("catches").then(data => this.catches = data);
  }
  
  
}
