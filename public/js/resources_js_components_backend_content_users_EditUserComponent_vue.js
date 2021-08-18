(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_backend_content_users_EditUserComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  index: 0,
  data: function data() {
    return {
      roles: [],
      selectedRole: [],
      user: {
        name: "",
        email: "",
        password: ""
      }
    };
  },
  methods: {
    addTag: function addTag(newTag) {
      var tag = {
        name: newTag,
        code: newTag.substring(0, 2) + Math.floor(Math.random() * 10000000)
      };
      this.options.push(tag);
      this.value.push(tag);
    },
    addUser: function addUser() {
      var formData = new FormData();
      var roleBox = [];
      var users = [];

      for (var index = 0; index < this.selectedRole.length; index++) {
        var element = this.selectedRole[index].id;
        roleBox.push(element);
      }

      formData.append("roles", roleBox);
      formData.append('name', this.user.name);
      formData.append('email', this.user.email);
      formData.append('password', this.user.password);
      axios.post('/users', formData).then(function (response) {
        console.log(response);
      })["catch"](function (error) {
        console.log(error);
      });
    }
  },
  created: function created() {
    var _this = this;

    axios.get('/user').then(function (response) {
      _this.roles = response.data.roles;
      console.log(response.data.roles);
    })["catch"](function (error) {
      console.log(error);
    });
    axios.get('user/' + this.$route.params.id).then(function (response) {
      console.log(response);
    })["catch"](function (error) {
      console.log(error);
    });
  }
});

/***/ }),

/***/ "./resources/js/components/backend/content/users/EditUserComponent.vue":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/backend/content/users/EditUserComponent.vue ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./EditUserComponent.vue?vue&type=template&id=7b05f195& */ "./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195&");
/* harmony import */ var _EditUserComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./EditUserComponent.vue?vue&type=script&lang=js& */ "./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _EditUserComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__.render,
  _EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/backend/content/users/EditUserComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************!*\
  !*** ./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditUserComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EditUserComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_EditUserComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195&":
/*!************************************************************************************************************!*\
  !*** ./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195& ***!
  \************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_EditUserComponent_vue_vue_type_template_id_7b05f195___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./EditUserComponent.vue?vue&type=template&id=7b05f195& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195&":
/*!***************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/backend/content/users/EditUserComponent.vue?vue&type=template&id=7b05f195& ***!
  \***************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "row", attrs: { id: "table-bordered" } }, [
    _vm._m(0),
    _vm._v(" "),
    _c("div", { staticClass: "col-12" }, [
      _c("div", { staticClass: "card" }, [
        _c(
          "div",
          { staticClass: "card-header" },
          [
            _vm._m(1),
            _vm._v(" "),
            _c(
              "router-link",
              {
                attrs: {
                  to: "/list/users",
                  size: "large",
                  gradient: "",
                  active: true
                }
              },
              [
                _vm._v(
                  "\n                          All User\n                      "
                )
              ]
            )
          ],
          1
        ),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "form",
            {
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.editUser($event)
                }
              }
            },
            [
              _c("div", { staticClass: "form-group" }, [
                _c("label", { attrs: { for: "exampleInputEmail1" } }, [
                  _vm._v("Name")
                ]),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.user.name,
                      expression: "user.name"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "type", placeholder: "Enter Full Name" },
                  domProps: { value: _vm.user.name },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.user, "name", $event.target.value)
                    }
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group" }, [
                _c("label", { attrs: { for: "exampleInputPassword1" } }, [
                  _vm._v("Email")
                ]),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.user.email,
                      expression: "user.email"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "type", placeholder: "Enter Email Address" },
                  domProps: { value: _vm.user.email },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.user, "email", $event.target.value)
                    }
                  }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group" }, [
                _c("label", { attrs: { for: "exampleInputPassword1" } }, [
                  _vm._v("Password")
                ]),
                _vm._v(" "),
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.user.password,
                      expression: "user.password"
                    }
                  ],
                  staticClass: "form-control",
                  attrs: { type: "password", placeholder: "Enter Password" },
                  domProps: { value: _vm.user.password },
                  on: {
                    input: function($event) {
                      if ($event.target.composing) {
                        return
                      }
                      _vm.$set(_vm.user, "password", $event.target.value)
                    }
                  }
                })
              ]),
              _vm._v(" "),
              _c(
                "div",
                { staticClass: "form-group" },
                [
                  _c("label", { attrs: { for: "exampleInputPassword1" } }, [
                    _vm._v("Role")
                  ]),
                  _vm._v(" "),
                  _c("multiselect", {
                    staticClass: "form-group",
                    attrs: {
                      label: "name",
                      "track-by": "id",
                      "close-on-select": false,
                      "clear-on-select": false,
                      options: _vm.roles,
                      multiple: true,
                      "preselect-first": true,
                      "preserve-search": true,
                      taggable: true
                    },
                    on: { tag: _vm.addTag },
                    model: {
                      value: _vm.selectedRole,
                      callback: function($$v) {
                        _vm.selectedRole = $$v
                      },
                      expression: "selectedRole"
                    }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "button",
                { staticClass: "btn btn-primary", attrs: { type: "submit" } },
                [_vm._v("Add")]
              )
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-12" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-lg-3 col-sm-6 col-12" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h2", { staticClass: "card-title" }, [
      _c("div", { staticClass: "mt-2" }),
      _vm._v(" "),
      _c("span", [_vm._v("Edit User")])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ normalizeComponent)
/* harmony export */ });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);