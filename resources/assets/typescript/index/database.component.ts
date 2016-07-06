
import {bootstrap} from '@angular/platform-browser-dynamic';
import {Component} from '@angular/core';
import { CoachZhongguonanzu2Component } from './database/coach-zhongguonanzu-2.component';
@Component({
    selector: 'database',
    template: `
<div class="panel panel-default">
    <div class="panel-body">
        <div class="btn-group-lg" role="group" aria-label="...">
            <button type="button" class="btn btn-default" (click)="selectFileType('player')">球员生涯</button>
            <button type="button" class="btn btn-default" (click)="selectFileType('coach')">教练生涯</button>
            <button type="button" class="btn btn-default" (click)="selectFileType('awards')">获奖记录</button>
        </div>
    </div>
    <div class="panel-body" *ngIf="file_type === 'player'">
        <div class="btn-group" role="group" aria-label="..." >
            <button type="button" class="btn btn-default" (click)="selectFileTypePlayer('childhood')">少年</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypePlayer('teenager')">青年</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypePlayer('adult')">成年</button>
        </div>
    </div>
    <div class="panel-body" *ngIf="file_type === 'coach'" >
        <div class="btn-group" role="group" aria-label="..." >
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('zhongguoguoshao')">中国国少</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('shanghaizhongyuan')">上海中远(助教)</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('zhongguonanzu_assistant')">中国男足(助教)</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('xiamenlanshi')">厦门蓝狮</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('changchunyatai')">长春亚泰</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('zhongguonanzu_1')">中国男足(一)</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('shanxirenhe')">陕西人和(贵州人和)</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('shanghaidongya')">上海东亚</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('jiangsushuntian')">江苏舜天</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('ADO')">海牙(助教)</button>
            <button type="button" class="btn btn-default" (click)="selectFileTypeCoach('zhongguonanzu_2')">中国男足(二)</button>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body" *ngIf="file_type === 'type_init'" >
        <p class="text-primary">请选择数据库</p>
    </div>
    <div class="panel-body" *ngIf="file_type === 'player'" [ngSwitch]="file_type_player">
        <!-- player -->
        <p class="text-primary" *ngSwitchWhen="'player_init'">请选择球员时期</p>
        <p *ngSwitchWhen="'childhood'">少年  待更新</p>
        <p *ngSwitchWhen="'teenager'">青年  待更新</p>
        <p *ngSwitchWhen="'adult'">成年  待更新</p>
        <p *ngSwitchDefault>&gt; 出错啦，请重新刷新页面</p>
    </div>
    <div class="panel-body" *ngIf="file_type === 'coach'" [ngSwitch]="file_type_coach">
        <!-- coach -->
        <p class="text-primary" *ngSwitchWhen="'coach_init'">请选择执教时期</p>
        <p *ngSwitchWhen="'zhongguoguoshao'">中国国少  待更新</p>
        <p *ngSwitchWhen="'shanghaizhongyuan'">上海中远(助教)  待更新</p>
        <p *ngSwitchWhen="'zhongguonanzu_assistant'">中国男足(助教)  待更新</p>
        <p *ngSwitchWhen="'xiamenlanshi'">厦门蓝狮  待更新</p>
        <p *ngSwitchWhen="'changchunyatai'">长春亚泰  待更新</p>
        <p *ngSwitchWhen="'zhongguonanzu_1'">中国男足(一)  待更新</p>
        <p *ngSwitchWhen="'shanxirenhe'">陕西人和(贵州人和)  待更新</p>
        <p *ngSwitchWhen="'shanghaidongya'">上海东亚  待更新</p>
        <p *ngSwitchWhen="'jiangsushuntian'">江苏舜天  待更新</p>
        <p *ngSwitchWhen="'ADO'">海牙(助教)  待更新</p>
        <coach-zhongguonanzu-2 *ngSwitchWhen="'zhongguonanzu_2'">中国男足(二)  待更新</coach-zhongguonanzu-2>
        <p *ngSwitchDefault>&gt; 出错啦，请重新刷新页面</p>
    </div>
    <div class="panel-body" *ngIf="file_type === 'awards'" >
        <p>获奖记录  待更新</p>
    </div>
</div>
    `,
    directives: [CoachZhongguonanzu2Component]
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

