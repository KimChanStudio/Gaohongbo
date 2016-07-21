System.register(['@angular/core', './database/coach-zhongguonanzu-1.component', './database/coach-zhongguonanzu-2.component'], function(exports_1, context_1) {
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
    var core_1, coach_zhongguonanzu_1_component_1, coach_zhongguonanzu_2_component_1;
    var DatabaseComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (coach_zhongguonanzu_1_component_1_1) {
                coach_zhongguonanzu_1_component_1 = coach_zhongguonanzu_1_component_1_1;
            },
            function (coach_zhongguonanzu_2_component_1_1) {
                coach_zhongguonanzu_2_component_1 = coach_zhongguonanzu_2_component_1_1;
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
                        selector: 'database',
                        templateUrl: "database/database-menu",
                        directives: [coach_zhongguonanzu_1_component_1.CoachZhongguonanzu1Component, coach_zhongguonanzu_2_component_1.CoachZhongguonanzu2Component]
                    }), 
                    __metadata('design:paramtypes', [])
                ], DatabaseComponent);
                return DatabaseComponent;
            }());
            exports_1("DatabaseComponent", DatabaseComponent);
        }
    }
});

//# sourceMappingURL=database.component.js.map
