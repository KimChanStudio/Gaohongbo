System.register(['@angular/core'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1;
    var DatabaseComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            }],
        execute: function() {
            DatabaseComponent = (function () {
                function DatabaseComponent() {
                    this.file_type = 'type_init';
                    this.file_type_player = 'player_init';
                    this.file_type_coach = 'coach_init';
                }
                DatabaseComponent.prototype.selectFileType = function (file_type) {
                    this.file_type_player = 'player_init';
                    this.file_type_coach = 'coach_init';
                    switch (file_type) {
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
                };
                DatabaseComponent.prototype.selectFileTypePlayer = function (file_type_player) {
                    switch (file_type_player) {
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
                };
                DatabaseComponent.prototype.selectFileTypeCoach = function (file_type_coach) {
                    switch (file_type_coach) {
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
                };
                DatabaseComponent = __decorate([
                    core_1.Component({
                        selector: 'database-nav',
                        template: "\n        <div class=\"panel panel-default\">\n            <div class=\"panel-body\">\n                <div class=\"btn-group-lg\" role=\"group\" aria-label=\"...\">\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileType('player')\">\u7403\u5458\u751F\u6DAF</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileType('coach')\">\u6559\u7EC3\u751F\u6DAF</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileType('awards')\">\u83B7\u5956\u8BB0\u5F55</button>\n                </div>\n            </div>\n            <div class=\"panel-body\" *ngIf=\"file_type === 'player'\">\n                <div class=\"btn-group\" role=\"group\" aria-label=\"...\" >\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypePlayer('childhood')\">\u5C11\u5E74</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypePlayer('teenager')\">\u9752\u5E74</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypePlayer('adult')\">\u6210\u5E74</button>\n                </div>\n            </div>\n            <div class=\"panel-body\" *ngIf=\"file_type === 'coach'\" >\n                <div class=\"btn-group\" role=\"group\" aria-label=\"...\" >\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('zhongguoguoshao')\">\u4E2D\u56FD\u56FD\u5C11</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('shanghaizhongyuan')\">\u4E0A\u6D77\u4E2D\u8FDC(\u52A9\u6559)</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('zhongguonanzu_assistant')\">\u4E2D\u56FD\u7537\u8DB3(\u52A9\u6559)</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('xiamenlanshi')\">\u53A6\u95E8\u84DD\u72EE</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('changchunyatai')\">\u957F\u6625\u4E9A\u6CF0</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('zhongguonanzu_1')\">\u4E2D\u56FD\u7537\u8DB3(\u4E00)</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('shanxirenhe')\">\u9655\u897F\u4EBA\u548C(\u8D35\u5DDE\u4EBA\u548C)</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('shanghaidongya')\">\u4E0A\u6D77\u4E1C\u4E9A</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('jiangsushuntian')\">\u6C5F\u82CF\u821C\u5929</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('ADO')\">\u6D77\u7259(\u52A9\u6559)</button>\n                    <button type=\"button\" class=\"btn btn-default\" (click)=\"selectFileTypeCoach('zhongguonanzu_2')\">\u4E2D\u56FD\u7537\u8DB3(\u4E8C)</button>\n                </div>\n            </div>\n        </div>\n        <div class=\"panel panel-default\">\n            <div class=\"panel-body\" *ngIf=\"file_type === 'type_init'\" >\n                <p class=\"text-primary\">\u8BF7\u9009\u62E9\u6570\u636E\u5E93</p>\n            </div>\n            <div class=\"panel-body\" *ngIf=\"file_type === 'player'\" [ngSwitch]=\"file_type_player\">\n                <!-- player -->\n                <p class=\"text-primary\" *ngSwitchWhen=\"'player_init'\">\u8BF7\u9009\u62E9\u7403\u5458\u65F6\u671F</p>\n                <p *ngSwitchWhen=\"'childhood'\">\u5C11\u5E74  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'teenager'\">\u9752\u5E74  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'adult'\">\u6210\u5E74  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchDefault>&gt; \u51FA\u9519\u5566\uFF0C\u8BF7\u91CD\u65B0\u5237\u65B0\u9875\u9762</p>\n            </div>\n            <div class=\"panel-body\" *ngIf=\"file_type === 'coach'\" [ngSwitch]=\"file_type_coach\">\n                <!-- coach -->\n                <p class=\"text-primary\" *ngSwitchWhen=\"'coach_init'\">\u8BF7\u9009\u62E9\u6267\u6559\u65F6\u671F</p>\n                <p *ngSwitchWhen=\"'zhongguoguoshao'\">\u4E2D\u56FD\u56FD\u5C11  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'shanghaizhongyuan'\">\u4E0A\u6D77\u4E2D\u8FDC(\u52A9\u6559)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'zhongguonanzu_assistant'\">\u4E2D\u56FD\u7537\u8DB3(\u52A9\u6559)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'xiamenlanshi'\">\u53A6\u95E8\u84DD\u72EE  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'changchunyatai'\">\u957F\u6625\u4E9A\u6CF0  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'zhongguonanzu_1'\">\u4E2D\u56FD\u7537\u8DB3(\u4E00)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'shanxirenhe'\">\u9655\u897F\u4EBA\u548C(\u8D35\u5DDE\u4EBA\u548C)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'shanghaidongya'\">\u4E0A\u6D77\u4E1C\u4E9A  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'jiangsushuntian'\">\u6C5F\u82CF\u821C\u5929  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'ADO'\">\u6D77\u7259(\u52A9\u6559)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchWhen=\"'zhongguonanzu_2'\">\u4E2D\u56FD\u7537\u8DB3(\u4E8C)  \u5F85\u66F4\u65B0</p>\n                <p *ngSwitchDefault>&gt; \u51FA\u9519\u5566\uFF0C\u8BF7\u91CD\u65B0\u5237\u65B0\u9875\u9762</p>\n            </div>\n            <div class=\"panel-body\" *ngIf=\"file_type === 'awards'\" >\n                <p>\u83B7\u5956\u8BB0\u5F55  \u5F85\u66F4\u65B0</p>\n            </div>\n        </div>\n    ",
                    }), 
                    __metadata('design:paramtypes', [])
                ], DatabaseComponent);
                return DatabaseComponent;
            }());
            exports_1("DatabaseComponent", DatabaseComponent);
        }
    }
});

//# sourceMappingURL=database_coach.component.js.map
