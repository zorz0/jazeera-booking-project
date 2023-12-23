"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[7561],{50947:function(e,n,t){t.d(n,{P:function(){return _}});var r,o,i=t(52209),a=t(35185);const _={headtags:(0,a.Ps)(r||(r=(0,i.Z)(["\n      fragment HeadTags on PageMetadata {\n        headTag {\n          title\n          hasAggregateOfferSchema\n          description\n          keywords\n          image\n          robots  \n          favicon\n          canonical {\n            url\n            alternate {\n              url\n              hreflang\n            }\n            ampAlternate\n          }\n          contentLanguage\n        }\n      }\n  "]))),pageContext:(0,a.Ps)(o||(o=(0,i.Z)(["\n      fragment PageContext on PageContext {       \n              type\n              airline {\n                  code\n                  name\n              }\n                geo {\n                    language {\n                            lang\n                            languageBeforeMarket\n                            separator\n                            siteEditionLanguage\n                            siteEditionMarket\n                            site_edition\n                            site_edition_country_geo_id\n                            uppercaseLanguage\n                            uppercaseMarket\n                            textDirection\n                    }\n                    location {\n                        destination_geo_id\n                        level_destination\n                        level_origin\n                        origin_geo_id\n                        user_input_destination_airport_code\n                        user_input_destination_city_name\n                        user_input_destination_country_name\n                        user_input_origin_airport_code\n                        user_input_origin_city_name\n                        user_input_origin_country_name\n                        user_input_origin_state_name\n                        user_input_destination_state_name\n                        origin_city_preposition_from\n                        origin_state_preposition_from\n                        origin_country_preposition_from\n                        destination_city_preposition_from\n                        destination_state_preposition_from\n                        destination_country_preposition_from\n                        origin_city_preposition_to\n                        origin_state_preposition_to\n                        origin_country_preposition_to\n                        destination_city_preposition_to\n                        destination_state_preposition_to\n                        destination_country_preposition_to\n                        level_property\n                        user_input_property_code\n                        user_input_property_name\n                        user_input_property_city_name\n                        user_input_property_country_name\n                        user_input_property_country_code\n                        user_input_property_state_name\n                        user_input_property_region_name                \n                    }\n                }\n                datasource {\n                        step\n                        variables\n                        hostname\n                        pathname\n                        referrer\n                        type\n                        url\n                        template_id\n                }\n                audience {\n                        browser\n                        device_category\n                        language\n                        city\n                        country\n                }\n                extra_info {\n                    airports {\n                        origin\n                        destination\n                    }\n                    route  {\n                        status\n                    }\n                    properties{\n                      codes\n                    }\n                }\n                dynamicContext {\n                  budgetMaximumAmount\n                  budgetRedemptionUnit\n                  isRedemption\n                  passengerCount\n                  productCategory\n                  productType\n                  isFlexibleDates\n                  discountCode\n                  departureDate\n                  returnDate\n                  originLocation\n                  destinationLocation\n                  originLocations\n                  destinationLocations\n                  defaultMonth\n                  experience {\n                      name\n                      type\n                    }\n                  event {\n                      location\n                      date\n                      session\n                      time\n                  }\n                }        \n      }\n"])))}},50959:function(e,n,t){t.d(n,{MT:function(){return g},wn:function(){return y},qc:function(){return f},D4:function(){return b},Kr:function(){return E},mo:function(){return h},Be:function(){return P},Ud:function(){return O},kS:function(){return M}});var r,o,i,a,_,s,c,u,l,p=t(52209),d=t(35185),m=t(50947);const g=(0,d.Ps)(r||(r=(0,p.Z)(["\n  query($page: PageInput!) {\n    layout(page : $page){\n      header {\n        logo {\n          link\n          desktop\n          mobile\n        }\n        mainMenu {\n          url\n          name\n          html\n          subMenu {\n            url\n            name\n            html\n          }\n        }\n        secondaryMenu {\n          url\n          name\n          html\n          subMenu {\n            url\n            name\n            html\n          }\n        }\n        layoutSettings {\n          variation\n          topSectionAlignment\n          bottomSectionAlignment\n          mainSectionAlignment\n          menuIconAlignment\n          isFullWidth\n          isLanguageToggleEnabled\n          mobileLogoAlignment\n          showMainNavigationIcons\n          showLanguageToggleFlags\n          desktopLogoWidth\n          mobileLogoWidth\n        }\n      }\n    \n      footer {\n        layoutSettings {\n          variation\n          topSectionAlignment\n          bottomSectionAlignment\n          useAccordionOnMobile\n          socialMediaIconHasBorder       \n          isSocialMediaIconFilled\n        }\n        mainMenu {\n          name\n          href\n          openNewTab\n          includeExternalLinkIcon\n          subMenu {\n            url\n            name\n            html\n            openNewTab\n            includeExternalLinkIcon\n          }\n        }\n        appSection{\n          title\n          apps{\n            name\n            href\n            iconUrl\n            altText\n            openNewTab\n        }\n      }\n        socialSection\n        imagesSection {\n          images {\n            src\n            altText\n            href\n            openNewTab\n          }\n        }\n        copyrightSection\n        logosSection\n      }\n    }\n  }\n"]))),y=(0,d.Ps)(o||(o=(0,p.Z)(["\n{\n  page @client{\n    tenant\n    siteEdition\n    slug\n    pageType\n    pageNumber\n    deviceType\n    languageCode  \n    queryParams\n  }\n}"]))),f=(0,d.Ps)(i||(i=(0,p.Z)([" \n query($page: PageInput!) {\n    lowestFare(page:$page){\n       formattedTotalPrice\n       currencyCode\n       fullPrice\n    }   \n  }  \n"]))),b=(0,d.Ps)(a||(a=(0,p.Z)(["\n  query($page: PageInput!) {\n    labels(page: $page)  \n  }  \n "]))),E=(0,d.Ps)(_||(_=(0,p.Z)(["\n  query($page: PageInput!) {\n    pageContext(page:$page){\n      ...PageContext \n    }\n  }\n  ","\n"])),m.P.pageContext),h=(0,d.Ps)(s||(s=(0,p.Z)(["\n  query($deepLinkParams: DeepLinkInput!) {\n    deepLink(deepLinkParams: $deepLinkParams) {\n       url\n       method\n       formData\n       headers\n  },\n}\n"]))),P=(0,d.Ps)(c||(c=(0,p.Z)(["\n  query($page: RedirectInput!) {\n    redirect(page:$page){\n      fullUrl\n      protocol\n      domain\n      subfolder\n      siteEdition\n      slug\n      originalRedirectUrl\n   } \n }\n"]))),O=(0,d.Ps)(u||(u=(0,p.Z)(["\n  query($page: PageInput!) {\n    pageMetadata(page: $page) {\n      headTag{\n        hasAggregateOfferSchema\n        customScript1\n        customScript2\n        customDataLayer{\n          name\n          data\n          gtm_datalayer\n          clientSideFields\n        }\n        emDataLayer{\n          airline{\n            name\n            iataCode\n          }\n          tenant{\n            name\n            code\n            type\n          }\n          product{\n            name\n          }\n          page{\n            author\n            pageName\n            url\n            hostname\n            uri\n            fullURL\n            typeName\n            languageIsoCode\n            countryIsoCode\n            siteEdition\n            dateCreated\n            countryCurrencyCode\n            typeCode\n          }\n          originCity{\n            name\n            cityCode\n          }\n          destinationCity{\n            name\n            cityCode\n          }\n          originCountry{\n            name\n            isoCode\n          }\n          destinationCountry{\n            name\n            isoCode\n          }\n          originAirport{\n            iataCode\n          }\n          destinationAirport{\n            iataCode\n          }\n          device\n          extraInfo\n          property{\n            name\n            code\n          }\n          city{\n            name\n            cityCode            \n          }\n          country{\n            name\n            isoCode            \n          }\n          region{\n            name                        \n          }\n        }\n      }\n      bodyTag {\n        customScript3\n        customScript4\n        customScript5\n      }\n    }\n    pageInfo(page: $page) {\n      languageCode\n      textDirection\n    }\n    pageTitleH1(page: $page){\n        title\n    }\n  }\n"]))),M=(0,d.Ps)(l||(l=(0,p.Z)(["\n  query($page: PageInput!, $geo: Coordinates, $language: String, $market: String, $template: String, $product: String) {\n    geoLocation(page: $page, geo: $geo, language: $language, market: $market, template: $template, product: $product){\n      nearestOriginAirport {\n        iataCode\n        geoId\n      }\n    }\n  }\n"])))},30661:function(e,n,t){t.d(n,{R:function(){return o},d:function(){return i}});var r=t(45943);const o=(e,n)=>!(0,r.yF)()&&("string"===typeof n?document.cookie.split(";").some((t=>t.includes("".concat(e,"=").concat(n)))):document.cookie.split(";").some((n=>n.includes("".concat(e))))),i=(e,n,t,i)=>!(0,r.yF)()&&(document.cookie="".concat(e,"=").concat(n).concat("string"===typeof t?"; expires=".concat(t):"").concat(i?"; path=/":""),o(e,n))},67981:function(e,n,t){t.d(n,{D:function(){return o}});var r=t(34155);const o=(e,{quality:n=80,height:t=500,fit:o="crop",format:i="auto"})=>{if(!e)return"";if(e.includes("/media-em/")){const o=new URL(e);return"".concat(r.env.USE_RELATIVE_IMGS?o.pathname:e,"?height=").concat(t,"&quality=").concat(n,"&format=").concat(i,"&opt=true")}return"".concat("https://assets.airtrfx.com/cdn-cgi/image","/height=").concat(t,",quality=").concat(n,",format=").concat(i,"/").concat(e)}},45943:function(__unused_webpack_module,__webpack_exports__,__webpack_require__){__webpack_require__.d(__webpack_exports__,{sk:function(){return getSubObj},yF:function(){return isSSR},sD:function(){return isAbsoluteUrl},ud:function(){return removeKey},g7:function(){return getLabels},TU:function(){return removeHTMLComments},rg:function(){return parseHTML},k6:function(){return parseHTMLStyles},SG:function(){return replaceVarWithValue},DF:function(){return _image__WEBPACK_IMPORTED_MODULE_8__.D},mN:function(){return splitByModifier},yk:function(){return hasPriceModifier},hi:function(){return hasVariable},_r:function(){return uncacheable},d9:function(){return clone},DD:function(){return removeEmptyFields},Jl:function(){return disableBodyScrollability},RV:function(){return enableBodyScrollability},zO:function(){return now},Dc:function(){return isSvg},hj:function(){return isNumber},HD:function(){return isString},bJ:function(){return isAlphaNumeric},RT:function(){return isISO_8601},vQ:function(){return removeShallowNullableProps},mR:function(){return _get},Qr:function(){return isEmptyObject},EP:function(){return dateFormated},nt:function(){return wait},U3:function(){return pluralizeLabel},oV:function(){return queryWithSkip},gI:function(){return isValidSiteEdition},uz:function(){return reactStringReplace},Hy:function(){return objToStr}});var _codebuild_output_src49954683_src_node_modules_next_node_modules_babel_runtime_helpers_esm_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_10__=__webpack_require__(10219),_codebuild_output_src49954683_src_node_modules_next_node_modules_babel_runtime_helpers_esm_defineProperty__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(92809),react__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(67294),next_script__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(4298),html_react_parser__WEBPACK_IMPORTED_MODULE_3__=__webpack_require__(30488),html_react_parser__WEBPACK_IMPORTED_MODULE_3___default=__webpack_require__.n(html_react_parser__WEBPACK_IMPORTED_MODULE_3__),classnames__WEBPACK_IMPORTED_MODULE_4__=__webpack_require__(94184),classnames__WEBPACK_IMPORTED_MODULE_4___default=__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_4__),lodash_clonedeep__WEBPACK_IMPORTED_MODULE_5__=__webpack_require__(83465),lodash_clonedeep__WEBPACK_IMPORTED_MODULE_5___default=__webpack_require__.n(lodash_clonedeep__WEBPACK_IMPORTED_MODULE_5__),react_process_string__WEBPACK_IMPORTED_MODULE_6__=__webpack_require__(75934),react_process_string__WEBPACK_IMPORTED_MODULE_6___default=__webpack_require__.n(react_process_string__WEBPACK_IMPORTED_MODULE_6__),_cookie__WEBPACK_IMPORTED_MODULE_7__=__webpack_require__(30661),_image__WEBPACK_IMPORTED_MODULE_8__=__webpack_require__(67981),_emotion_react_jsx_runtime__WEBPACK_IMPORTED_MODULE_9__=__webpack_require__(35944);const _excluded=["skip"];function ownKeys(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function _objectSpread(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?ownKeys(Object(t),!0).forEach((function(n){(0,_codebuild_output_src49954683_src_node_modules_next_node_modules_babel_runtime_helpers_esm_defineProperty__WEBPACK_IMPORTED_MODULE_0__.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):ownKeys(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}const getSubObj=(e={},n=[])=>"object"===typeof e&&Array.isArray(n)&&n.length?Object.keys(e).reduce(((t,r)=>n.includes(r)?(t[r]=e[r],t):t),{}):{},clone=e=>lodash_clonedeep__WEBPACK_IMPORTED_MODULE_5___default()(e),removeEmptyFields=e=>{Object.keys(e).forEach((n=>{e[n]&&"object"===typeof e[n]?removeEmptyFields(e[n]):null==e[n]&&delete e[n]}))},uncacheable=e=>{const n=clone(e);return n.toJSON=()=>null,n},isSSR=()=>!1,isSvg=e=>e&&Array.isArray(e.match(/.svg$/)),removeKey=(e,n)=>{for(const t in e)t===n?delete e[t]:"object"===typeof e[t]&&removeKey(e[t],n)},getLabels=(e,n)=>{if(n&&n.length)return n.reduce(((n,t)=>(n[t]=(null===e||void 0===e?void 0:e[t])||t,n)),{})},removeHTMLComments=e=>e&&e.replace(/<!--(.*?)-->/g,""),parseHTML=(html,{staticAttributes:staticAttributes={},replace:replace={},removeComments:removeComments=!0}={})=>{const OPTIONS={replace:({children:children,name:name,data:data,attribs:attribs,type:type})=>{if(!name)return data;const renderChildren=({children:children,name:Tag,data:data,attribs:dynamicAttributes={},type:type})=>{if(!Tag)return data;if("script"===Tag&&dynamicAttributes.src)return(0,_emotion_react_jsx_runtime__WEBPACK_IMPORTED_MODULE_9__.tZ)(next_script__WEBPACK_IMPORTED_MODULE_2__.default,{src:dynamicAttributes.src,type:"text/javascript",onError:e=>{console.error("Asset Custom Script Error",e)}},dynamicAttributes.src);if("script"===Tag&&children&&children.length)return(0,_emotion_react_jsx_runtime__WEBPACK_IMPORTED_MODULE_9__.tZ)(next_script__WEBPACK_IMPORTED_MODULE_2__.default,_objectSpread(_objectSpread({},dynamicAttributes),{},{dangerouslySetInnerHTML:{__html:"".concat(children[0].data)}}));(dynamicAttributes.onclick||dynamicAttributes.onClick)&&(dynamicAttributes.onClick=()=>eval(dynamicAttributes.onclick||dynamicAttributes.onClick));const props=_objectSpread(_objectSpread({},dynamicAttributes),{},{className:classnames__WEBPACK_IMPORTED_MODULE_4___default()(staticAttributes.className?staticAttributes.className:"",dynamicAttributes.class?dynamicAttributes.class:""),style:dynamicAttributes.style?parseHTMLStyles(dynamicAttributes.style):{}}),content=children&&children.length?children.map((e=>renderChildren(e))):data;return"function"===typeof replace[Tag]?replace[Tag](props,content):(delete props.class,delete props.onclick,react__WEBPACK_IMPORTED_MODULE_1__.createElement(Tag,props,content))};return renderChildren({children:children,name:name,data:data,attribs:attribs})}};let parsedHTML=html;return removeComments&&(parsedHTML=removeHTMLComments(html)),parsedHTML&&html_react_parser__WEBPACK_IMPORTED_MODULE_3___default()(parsedHTML,OPTIONS)},parseHTMLStyles=e=>e.split(";").filter((e=>e.split(":")[0]&&e.split(":")[1])).map((e=>[e.split(":")[0].trim().replace(/-./g,(e=>e.substr(1).toUpperCase())),e.split(":").slice(1).join(":").trim()])).reduce(((e,n)=>_objectSpread(_objectSpread({},e),{},{[n[0]]:n[1]})),{}),replaceVarWithValue=(e,n)=>(e&&(e=e.replace("**Flights.FromLowestPrice**",n).trim()),e),splitByModifier=e=>{let n=e&&e.split("{price_modifier}").map((e=>e.trim()));return!n&&(n=[]),n},hasPriceModifier=e=>e&&-1!==e.indexOf("{price_modifier}"),hasVariable=e=>{const n=new RegExp("\\*\\*[^*]+\\*\\*","g");return e.search(n)>=0},disableBodyScrollability=()=>{document.documentElement.style.overflow="hidden",document.body.style.overflow="hidden"},enableBodyScrollability=()=>{document.body.style.overflow="auto",document.documentElement.style.overflow="auto"},isISO_8601=e=>/^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$/.test(e),isAbsoluteUrl=e=>e&&(e.startsWith("https://")||e.startsWith("http://")||e.startsWith("//")),now=()=>window.performance&&performance.now&&performance.now()||Date.now(),isBoolean=e=>"boolean"===typeof e,isNumber=e=>"number"===typeof e&&e===e&&e!==1/0&&e!==-1/0,isString=e=>"string"===typeof e,isAlphaNumeric=e=>e&&null!==e.match(/^[a-z0-9]+$/i),removeShallowNullableProps=e=>Object.entries(e).reduce(((e,[n,t])=>null!=t?(e[n]=t,e):e),{}),_get=(e,n,t)=>{const r=t=>String.prototype.split.call(n,t).filter(Boolean).reduce(((e,n)=>null!==e&&void 0!==e&&null!==e?e[n]:e),e),o=r(/[,[\]]+?/)||r(/[,[\].]+?/);return""===o||void 0===o||o===e?t:o},isEmptyObject=(e={})=>e&&0===Object.keys(e).length&&e.constructor===Object,dateFormated=e=>{const n="string"===typeof e?e:null;return n&&new Date(n).toISOString().split("T")[0]},wait=e=>new Promise((n=>setTimeout(n,e))),pluralizeLabel=(e=0,n="",t="")=>e>1?t:n,queryWithSkip=({client:e,query:n,options:t})=>{const{skip:r}=t,o=(0,_codebuild_output_src49954683_src_node_modules_next_node_modules_babel_runtime_helpers_esm_objectWithoutProperties__WEBPACK_IMPORTED_MODULE_10__.Z)(t,_excluded);return r?Promise.resolve({loading:!1,skip:!0}):e.query(_objectSpread({query:n},o))},isValidSiteEdition=e=>/^[a-z]{2}([-_][a-zA-Z]{2,4}){0,2}$/.test(e),reactStringReplace=(e,n,t)=>{const r=[{regex:n,fn:t}];return react_process_string__WEBPACK_IMPORTED_MODULE_6___default()(r)(e)},objToStr=e=>JSON.stringify(e).replace("{"," ").replace("}"," ").replace(/"/g,"").replace(/,/g,", ")},52058:function(e,n,t){t.d(n,{Z:function(){return k}});var r=t(92809),o=t(46706),i=t(4372),a=t(36689),_=t(8056),s=t(83536),c=t(13984),u=t(49066),l=t.n(u),p=t(38070),d=t(14846),m=JSON.parse('{"J":{"V":[{"kind":"INTERFACE","name":"Link","possibleTypes":[{"name":"BreadCrumb"},{"name":"MenuItem"},{"name":"RelatedRoutesLink"},{"name":"Item"}]},{"kind":"INTERFACE","name":"DestinationRoutesLink","possibleTypes":[{"name":"CityLink"},{"name":"CountryLink"},{"name":"PropertyLink"},{"name":"StateLink"}]},{"kind":"INTERFACE","name":"FareModule","possibleTypes":[{"name":"FareModuleAggregationGroupRoute"},{"name":"FareModuleHistogram"}]},{"kind":"INTERFACE","name":"LanguageToggle","possibleTypes":[{"name":"CountryToggleSelector"},{"name":"EmptyToggleSelector"},{"name":"LanguageToggleSelector"}]}]}}'),g=t(45943);const y={CityLink:{keyFields:["url","name"]},CountryLink:{keyFields:["url","name"]},CmpConfig:{keyFields:["cmpConfig",["cmp"]]},Query:{fields:{standardFareModule:{keyArgs:["id"]},sfmHospitality:{keyArgs:["id"]},pageContext:{keyArgs:["page",["tenant","siteEdition","slug"]]},weather:{keyArgs:["page",["tenant","siteEdition","slug"]]},promoWidget:{keyArgs:["id"]}}},StandardFareModule:{keyFields:["id"],fields:{fares:{keyArgs:!1,merge(e=[],n,{args:{pageNumber:t,limit:r,urlParameters:o}}){if(!(0,g.Qr)(o)&&1===t)return n;const i=(t-1)*r,a=e?e.slice(0):[];for(let _=0;_<=n.length-1;_++)a[i+_]=n[_];return a}}}},SFMHospitality:{keyFields:["id"],fields:{rates:{keyArgs:!1,merge:(e=[],n,{args:{pageNumber:t}})=>1===t?[...n]:[...e,...n]}}},PromoWidget:{keyFields:["id"],fields:{offers:{keyArgs:!1,read(e,{args:{offset:n=0,limit:t=10}={}}){const r=n+t,o=e&&e.slice(n,r);if(o&&o.length>0)return o},merge(e=[],n=[],{args:{offset:t=0,limit:r=10}={}}){const o=e?e.slice(0):[],i=t+Math.min(r,null===n||void 0===n?void 0:n.length);for(let a=t;a<i;++a)o[a]=n[a-t];return o}}}}},f={};m.J.V.forEach((e=>{e.possibleTypes&&(f[e.name]=e.possibleTypes.map((e=>e.name)))}));const b=(e={})=>new d.h({possibleTypes:f,typePolicies:y}).restore(e);var E=t(35944),h=t(34155);function P(e,n){var t=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);n&&(r=r.filter((function(n){return Object.getOwnPropertyDescriptor(e,n).enumerable}))),t.push.apply(t,r)}return t}function O(e){for(var n=1;n<arguments.length;n++){var t=null!=arguments[n]?arguments[n]:{};n%2?P(Object(t),!0).forEach((function(n){(0,r.Z)(e,n,t[n])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(t)):P(Object(t)).forEach((function(n){Object.defineProperty(e,n,Object.getOwnPropertyDescriptor(t,n))}))}return e}const M=new o.i(((e,n)=>(h.env.DEBUG,n(e).map((e=>e))))),T=(0,c.q)((({graphQLErrors:e,networkError:n})=>{e&&e.forEach((({message:e,locations:n,path:t})=>console.error("[GraphQL error]: Message: ".concat(e,", Location: ").concat(n,", Path: ").concat(t)))),n&&console.error("[Network error]: ".concat(n))}));var k=({page:e,resolvers:n,typeDefs:t})=>l()((({initialState:e})=>new i.f(O(O({ssrMode:!1,link:o.i.from([M,T,new s.W({delay:{initial:300,max:2e4,jitter:!0},attempts:{max:2}}),new _.A({credentials:"same-origin",uri:"https://vg-api.airtrfx.com/graphql",useGETForQueries:!1,batchMax:20,batchInterval:30})]),cache:b(e)},t?{typeDefs:t}:{}),n?{resolvers:n}:{}))),{render:({Page:e,props:n})=>(0,E.tZ)(a.e,{client:n.apollo,children:(0,E.tZ)(e,O({},n))}),getDataFromTree:p.J})(e)}}]);