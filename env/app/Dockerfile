FROM node:17-alpine

# See https://hub.docker.com/_/node/
# Check https://github.com/nodejs/docker-node/tree/b4117f9333da4138b03a546ec926ef50a31506c3#nodealpine to understand why libc6-compat might be needed.
RUN set -eux & \
    apk add --no-cache \
        libc6-compat \
        nodejs \
        yarn

WORKDIR ${WORKDIR}
# COPY ${WORKDIR}/package.json ${WORKDIR}/yarn.lock ./
# RUN --mount=type=cache,id=yarn,sharing=locked,target=/usr/local/share/.cache/yarn yarn install --frozen-lockfile

# RUN yarn build

ENV APOLLO_PRODUCTION_INTROSPECTION=false

RUN addgroup -g ${GROUP_ID} -S ${USER_NAME}
RUN adduser -S ${USER_NAME} -u ${USER_ID}

RUN mkdir -p ${WORKDIR}/.next/cache/images && chown nextjs:nodejs ${WORKDIR}/.next/cache/images
VOLUME ${WORKDIR}/.next/cache/images

# You only need to copy next.config.js if you are NOT using the default configuration
# COPY --from=builder ${WORKDIR}/next.config.js ./
# COPY --from=builder ${WORKDIR}/public ./public
# COPY --from=builder --chown=nextjs:nodejs ${WORKDIR}/.next ./.next
# COPY --from=builder ${WORKDIR}/node_modules ./node_modules
# COPY --from=builder ${WORKDIR}/package.json ./package.json

USER ${USER_NAME}

EXPOSE ${APP_PORT}

# Next.js collects completely anonymous telemetry data about general usage.
# Learn more here: https://nextjs.org/telemetry
# Uncomment the following line in case you want to disable telemetry.
ENV NEXT_TELEMETRY_DISABLED 1

CMD ["yarn", "start"]