node {
  
  
  stage('SCM') {
    git "https://github.com/YasinPiricci23/deneme.git"
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() {
    sh "${scannerHome}/bin/sonar-scanner -X  -Dsonar.language=php -Dsonar.qualitygate.wait=true  -Dsonar.sources=. -Dsonar.host.url=http://localhost:8080  -Dsonar.projectKey=test -Dsonar.login=sqp_5f8f89b0713d48d849022f2d1dc71ab6d1350e05   -Dsonar.sourceEncoding=UTF-8 -Dsonar.exclusions=**/*.js,**/*.css,**/*.scss,**/inlineall.html"
  
}
}
}  
