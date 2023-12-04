node {
  def SONAR_URL="http://host.docker.internal:9000"
  def SONAR_TOKEN="sqp_37176a1bdfa5a8b1157b640ba7afc1fe7d52e2f9"
  def REPO_SHORT_TAGS="${GIT_COMMIT.take(7)}"  
  
  stage('SCM') {
    git "https://github.com/YasinPiricci23/deneme.git"
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() {
    sh "${scannerHome}/bin/sonar-scanner -X  -Dsonar.language=php -Dsonar.qualitygate.wait=true  -Dsonar.sources=. -Dsonar.host.url=${SONAR_URL}  -Dsonar.projectKey=deneme-1  -Dsonar.login=${SONAR_TOKEN}   -Dsonar.sourceEncoding=UTF-8 -Dsonar.exclusions=**/*.js,**/*.css,**/*.scss,**/inlineall.html -Dsonar.projectVersion=${REPO_SHORT_TAG}" 
}
}
} 
