node {
  stage('SCM') {
    git "https://github.com/YasinPiricci23/deneme.git"
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() {
    sh "${scannerHome}/bin/sonar-scanner -X -Dsonar.projectKey=deneme-1 -Dsonar.sources=. -Dsonar.host.url=http://host.docker.internal:9000  -Dsonar.token=sqp_37176a1bdfa5a8b1157b640ba7afc1fe7d52e2f9 -Dsonar.sourceEncoding=UTF-8"
   
  }
}
}  
