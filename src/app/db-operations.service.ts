import { Injectable } from '@angular/core';
import {  Http, Response, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs';
import 'rxjs/Rx';

@Injectable()
export class DbOperationsService {
	apiURL = "http://localhost:81/angular4/getData.php";
  	constructor(private http: Http){}
  	//Save users
	saveUsers(users: any[]){
		console.log(users);
		
		
		this.http.post("http://localhost:81/angular4/insert.php?first_name="+users['first_name']+"&last_name="+users['last_name'], users)
    	.subscribe(
        (val) => {
            console.log("POST call successful value returned in body", 
                        val);
        },
        response => {
            console.log("POST call in error", response);
        },
        () => {
            console.log("The POST observable is now completed.");
        });
	}
	
	getCount()
	
	{
		const headers = new Headers();

		headers.append("Cache-Control", "no-cache");
        headers.append('Access-Control-Allow-Origin', '*');
        headers.append('Access-Control-Allow-Methods', 'GET, POST');
        headers.append('Access-Control-Max-Age', '1728000');
		headers.append('Content-Type', 'application/x-www-form-urlencoded');
	    return this.http.get("http://localhost:81/angular4/getCount.php");
	}
	
	
	//Get all users
	getUsers() {
		const headers = new Headers();

		headers.append("Cache-Control", "no-cache");
        headers.append('Access-Control-Allow-Origin', '*');
        headers.append('Access-Control-Allow-Methods', 'GET, POST');
        headers.append('Access-Control-Max-Age', '1728000');
		headers.append('Content-Type', 'application/x-www-form-urlencoded');
	    return this.http.get("http://localhost:81/angular4/getData.php");
	}
	//Update user
	updateUser(user)
	{
		return this.http.put("http://localhost:81/angular4/edit.php?id="+user['id']+"&first_name="+user['first_name']+"&last_name="+user['last_name']+"", user).subscribe(
        (val) => {
            console.log("UPDATE call successful value returned in body", 
                        val);
        },
        response => {
            console.log("UPDATE call in error", response);
        },
        () => {
            console.log("The UPDATE observable is now completed.");
        });
	}
	//Delete user
	deleteUser(user){
		return this.http.delete("http://localhost:81/angular4/delete.php?id="+user['id']+"", new RequestOptions({body : user
  		})).subscribe(
        (val) => {
            console.log("DELETE call successful value returned in body", 
                        val);
        },
        response => {
            console.log("DELETE call in error", response);
        },
        () => {
            console.log("The DELETE observable is now completed.");
        });
	}
}
