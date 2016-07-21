
import {bootstrap} from '@angular/platform-browser-dynamic';
import {Component} from '@angular/core';
import { CoachZhongguonanzu1Component } from './database/coach-zhongguonanzu-1.component';
import { CoachZhongguonanzu2Component } from './database/coach-zhongguonanzu-2.component';
import {CoachADOComponent} from './database/coach-ADO.component';
@Component({
    selector: 'database',
    templateUrl: `database/database-menu`,
    directives: [CoachZhongguonanzu1Component,CoachZhongguonanzu2Component,CoachADOComponent]
})
export class DatabaseComponent {
    file_type        = 'type_init';
    file_type_player = 'player_init';
    file_type_coach  = 'coach_init';

    selectFileType(file_type) {
        this.file_type_player = 'player_init';
        this.file_type_coach  = 'coach_init';
        switch(file_type) {
            //file_type
            case 'player':
                this.file_type = 'player';
                break;
            case 'coach':
                this.file_type = 'coach';
                break;
            case 'awards':
                this.file_type = 'awards';
                break;
            default:
                this.file_type = 'error';
                break;
        }
    }
    selectFileTypePlayer(file_type_player) {
        switch(file_type_player) {
            case 'childhood':
                this.file_type_player = 'childhood';
                break;
            case 'teenager':
                this.file_type_player = 'teenager';
                break;
            case 'adult':
                this.file_type_player = 'adult';
                break;
            default:
                this.file_type_player = 'error';
                break;
        }
    }
    selectFileTypeCoach(file_type_coach) {
        switch(file_type_coach) {
            case 'zhongguoguoshao':
                this.file_type_coach = 'zhongguoguoshao';
                break;
            case 'shanghaizhongyuan':
                this.file_type_coach = 'shanghaizhongyuan';
                break;
            case 'zhongguonanzu_assistant':
                this.file_type_coach = 'zhongguonanzu_assistant';
                break;
            case 'xiamenlanshi':
                this.file_type_coach = 'xiamenlanshi';
                break;
            case 'changchunyatai':
                this.file_type_coach = 'changchunyatai';
                break;
            case 'zhongguonanzu_1':
                this.file_type_coach = 'zhongguonanzu_1';
                break;
            case 'shanxirenhe':
                this.file_type_coach = 'shanxirenhe';
                break;
            case 'shanghaidongya':
                this.file_type_coach = 'shanghaidongya';
                break;
            case 'jiangsushuntian':
                this.file_type_coach = 'jiangsushuntian';
                break;
            case 'ADO':
                this.file_type_coach = 'ADO';
                break;
            case 'zhongguonanzu_2':
                this.file_type_coach = 'zhongguonanzu_2';
                break;
            default:
                this.file_type_coach = 'error';
                break;
        }
    }
}

