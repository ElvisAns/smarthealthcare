
# E-Health Monitor

The patient monitoring tool is an Internet of things based health system. E-health is an
emerging field in the intersection of medical electronics and IT, public health
and business, referring to health services and information delivered or enhanced through the Internet and related technologies.

You can read more [here](https://drive.google.com/file/d/1Dk49aXsfDv07lNoJFKYdP_WonEkIg3-p/view?usp=sharing)


## Deployment

You can deploy this app on your local environment but you will not
exploit all of the features.
To fully test the ecosystem you need both the app and the device hardware

```bash
  -> git clone https://github.com/ElvisAns/smarthealthcare.git

```

To import the database make sure you created the database first then import sql (located within the repo) file
using your credential 

MySQL cli
```bash
  -> mysqlimport -h host -P 3306 -u user -p dbname pathto\patient_monitor final.sql

```



## Author

- [@elvisansima](https://elvisansima.netlify.app/)


## 🚀 About Me
I'm a full stack developer with a passion for both frontend and backend development!


## Screenshots
<img src="data flow model.jpg" width="500">


![image](https://user-images.githubusercontent.com/35831811/167665804-772aa75b-bf94-4351-a5bc-ad2f8dcc6269.png)

![image](https://user-images.githubusercontent.com/35831811/167666230-d3c97d55-60d7-47ed-805e-acbf60d9f6d5.png)



## Demo

The demo app is served proudly on 
https://clever-cloud.com

You can access it on [live app link](https://ehealthmonitor.cleverapps.io/)
