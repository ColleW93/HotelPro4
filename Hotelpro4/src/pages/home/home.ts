import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import {Task} from '../../model/task';
import {AlertController} from 'ionic-angular';
//import {Storage, LocalStorage} from 'ionic-angular/Storage';
import { Http } from '@angular/http';
//import { Response } from '@angular/Response';
//import { Post }           from '../../model/post';
import 'rxjs/Rx';
import { Observable }     from 'rxjs/Observable';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {
  constructor(private navCtrl: NavController, public alertCtrl: AlertController, public http: Http) {
    
  }

  public tasks:Task[] = [];


  public Update() 
    {
      let alert = this.alertCtrl.create({
       title: 'Way To Go!',
        subTitle: 'Your Task Has Been Super Duper Updated!',
        buttons: ['Awesome!']
        });
      alert.present();

    var url:string = "/myProxy/update-tasks";
    //var response = this.http.put(url).map(res => res.json()).subscribe(data => this.tasks = data.tasks);

    return response;
                
    }
}
