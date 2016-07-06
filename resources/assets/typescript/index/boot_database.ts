
import {bootstrap} from '@angular/platform-browser-dynamic';
import {provide} from '@angular/core';

import {DatabaseComponent} from './database.component';

import {HTTP_PROVIDERS} from '@angular/http';
import { Http, Response } from '@angular/http';
import 'rxjs/Rx';
import {
  LocationStrategy,
  HashLocationStrategy,
}
from '@angular/common';
import {ROUTER_DIRECTIVES, ROUTER_PROVIDERS} from '@angular/router';

bootstrap(DatabaseComponent, [
    ROUTER_PROVIDERS,
    ROUTER_DIRECTIVES,
    HTTP_PROVIDERS,
    provide(LocationStrategy, {useClass: HashLocationStrategy})
]);
