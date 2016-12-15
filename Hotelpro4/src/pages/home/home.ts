import { Component } from '@angular/core';

import { NavController } from 'ionic-angular';
import {Task} from '../../model/task';
import {AlertController} from 'ionic-angular';
//import {Storage, LocalStorage} from 'ionic-angular/Storage';
import { Http, Headers } from '@angular/http';
//import { Response } from '@angular/Response';
//import { Post }           from '../../model/post';
import 'rxjs/Rx';
//import { Observable }     from 'rxjs/Observable';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public task_id: string;
  public status: string;

  constructor(private navCtrl: NavController, public alertCtrl: AlertController, public http: Http) {
    this.currentTask = new Task();
  }

  public currentTask:Task;


  public Update() 
    {
      let alert = this.alertCtrl.create({
       title: 'Way To Go!',
        subTitle: 'Your Task Has Been Super Duper Updated!',
        buttons: ['Awesome!']
        });
      alert.present();

      
    console.log(this.currentTask.id);
    console.log(this.currentTask.status);
    var headers = new Headers();
    headers.append('Content-Type', 'application/json');
    var url:string = "/myProxy/updateTask/"+this.currentTask.id;
    console.log(url);
    console.log(JSON.stringify(this.currentTask));
    return this.http.put(url, JSON.stringify(this.currentTask), {headers:headers})
    .map(res => console.log(res)).subscribe(data => console.log(data));
    //return this.http.put(url, JSON.stringify(this.currentTask), {headers: headers})
    //.map();

   // return this.http.put(url, this.currentTask, {headers:headers}).map(res => res.json()).subscribe(data => console.log("data: " + data"));

    //var response = this.http.put(url, this.task).map(res => res.json()).subscribe(data => this.task = data.task);

    //return response;
                
    }
}
