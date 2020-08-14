'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var HospitalEmployee = function () {
  function HospitalEmployee(name) {
    _classCallCheck(this, HospitalEmployee);

    this._name = name;
    this._remainingVacationDays = 20;
  }

  _createClass(HospitalEmployee, [{
    key: 'takeVacationDays',
    value: function takeVacationDays(daysOff) {
      this._remainingVacationDays -= daysOff;
    }
  }, {
    key: 'name',
    get: function get() {
      return this._name;
    }
  }, {
    key: 'remainingVacationDays',
    get: function get() {
      return this._remainingVacationDays;
    }
  }], [{
    key: 'generatePassword',
    value: function generatePassword() {
      return Math.floor(Math.random() * 10000);
    }
  }]);

  return HospitalEmployee;
}();

var Nurse = function (_HospitalEmployee) {
  _inherits(Nurse, _HospitalEmployee);

  function Nurse(name, certifications) {
    _classCallCheck(this, Nurse);

    var _this = _possibleConstructorReturn(this, (Nurse.__proto__ || Object.getPrototypeOf(Nurse)).call(this, name));

    _this._certifications = certifications;
    return _this;
  }

  _createClass(Nurse, [{
    key: 'addCertification',
    value: function addCertification(newCertification) {
      this.certifications.push(newCertification);
    }
  }, {
    key: 'certifications',
    get: function get() {
      return this._certifications;
    }
  }]);

  return Nurse;
}(HospitalEmployee);

var nurseOlynyk = new Nurse('Olynyk', ['Trauma', 'Pediatrics']);
var nurseDurant = new Nurse('Durant', ['Orthopedics']);
nurseOlynyk.takeVacationDays(5);
console.log(nurseOlynyk.remainingVacationDays);
nurseOlynyk.addCertification('Genetics');
console.log(nurseOlynyk.certifications);

module.exports = HospitalEmployee;