import {Skill} from './skill';
import{PROJECTS} from './projects';

export const SKILLS: Skill[]=[
    {
        id:0,
        name:'PHP',
        level:'Basic',
        image:'../../assets/images/php.png',
        experience:'<1 year',
        projects: [PROJECTS[0]]
        
    },
    {
        id:1,
        name:'C#',
        level:'Basic',
        image:'../../assets/images/cHash.png',
        experience:'<1 year',
        projects:[PROJECTS[1]]
    },
    {
        id:2,
        name:'jQuery',
        level:'Basic',
        image:'../../assets/images/jQuery.gif',
        experience:'<1 year',
        projects:[PROJECTS[0]]
    },
    {
        id:3,
        name:'Grump',
        level:'Basic',
        image:'../../assets/images/grump.png',
        experience:'<1 year',
        projects:[PROJECTS[0]]
    },
    {
        id:4,
        name:'Gulp',
        level:'Basic',
        image:'../../assets/images/gulp.jpg',
        experience:'<1 year',
        projects:[PROJECTS[0]]
    },
    {
        id:5,
        name:'Bootstrap',
        level:'Intermidate',
        image:'../../assets/images/bootstrap.jpg',
        experience:'1 year',
        projects:[
            PROJECTS[2],
            PROJECTS[3],
            PROJECTS[4],

        ]
    },
    {
        id:6,
        name:'WordPress',
        level:'Intermidate',
        image:'../../assets/images/wordpress.png',
        experience:'>1 year',
        projects:[
            PROJECTS[5]
        ]
    },
    {
        id:7,
        name:'Javascript',
        level:'Intermidate',
        image:'../../assets/images/javascript.svg',
        experience:'+1 year',
        projects:[
            PROJECTS[0]
        ]
    },
    {
        id:8,
        name:'Photoshop',
        level:'Basic',
        image:'../../assets/images/photoshop.png_s',
        experience:'+1 year',
        projects:[
            PROJECTS[0]
        ]
    },
    {
        //angular in develop
        id:9,
        name:'Angular',
        level:'Intermidate',
        image:'../../assets/images/angular.png',
        experience:'1 year',
        projects:[
            PROJECTS[6],
            PROJECTS[7]
        ]
    },
    {
        //Ionic
        id:10,
        name:'Ionic',
        level:'Intermidate',
        image:'../../assets/images/ionic.png',
        experience:'<1 year',
        projects:[
            PROJECTS[8]
        ]
    },
    {
        id:11,
        name:'HTML',
        level:'Advanced',
        image:'../../assets/images/Html.png',
        experience:'+2 Years',
        projects:[
            PROJECTS[0]
        ]
    },
    {
        id:12,
        name:'CSS',
        level:'Advanced',
        image:'../../assets/images/css.png',
        experience:'+2 Years',
        projects:[
            PROJECTS[0]
        ]
    },
    {
        id:13,
        name:'Nativescript',
        level:'Intermidate',
        image:'../../assets/images/nativescript.png',
        experience:'<1 Years',
        projects:[
            PROJECTS[9]
        ] 
    }

]