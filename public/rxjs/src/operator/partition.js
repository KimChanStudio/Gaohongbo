var not_1 = require('../util/not');
var filter_1 = require('./filter');
/**
 * @param predicate
 * @param thisArg
 * @return {Observable<T>[]}
 * @method partition
 * @owner Observable
 */
function partition(predicate, thisArg) {
    return [
        filter_1.filter.call(this, predicate),
        filter_1.filter.call(this, not_1.not(predicate, thisArg))
    ];
}
exports.partition = partition;
//# sourceMappingURL=partition.js.map