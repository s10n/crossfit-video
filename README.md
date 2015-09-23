## 설치
* 서브모듈을 초기화하고 업데이트합니다.
```bash
git submodule init
git submodule update
```
* `npm install`을 수행합니다. 이 명령은 자동으로 `bower.json`과 `package.json`의 디펜던시를 가져오고 `grunt build`를 실행합니다.

### Grunt Tasks
* `grunt clean`: grunt가 생성한 스타일시트와 자바스크립트를 삭제합니다.

#### 개발 환경
* `grunt css`: 스타일시트를 컴파일하고 소스맵을 생성합니다.
* `grunt js`: 자바스크립트 파일들을 연결합니다.
* `grunt`: `grunt css`와 `grunt js`를 수행합니다.
* `grunt watch`: less 파일이나 js 파일이 바뀔 때마다, 각각 `grunt css`와 `grunt js`를 수행합니다.

#### 프로덕션 환경
* `grunt build-css`: 스타일시트를 prefix, sort, lint, minify합니다.
* `grunt build-js`: 자바스크립트를 uglify합니다.
* `grunt build`: `grunt build-js`와 `grunt build-css`를 수행합니다.
